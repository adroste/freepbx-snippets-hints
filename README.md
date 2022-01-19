# freepbx-snippets-hints
A collection of snippets / hints for FreePBX


## Busy on busy for ring groups

See: https://community.freepbx.org/t/solved-ring-group-with-voicemail-and-busy-on-busy/47247/14


## Remove area code for incoming caller id

See: https://community.freepbx.org/t/strip-off-country-and-area-code-from-incoming-caller-id-name/37048/6


## Restart system with feature code

Make sure that the asterisk user can use the reboot command.
Check that the following line is in `/etc/sudoers`:
```
asterisk ALL = NOPASSWD: /sbin/reboot
```

In `extensions_custom.conf`:
```
[restart-system]
exten => s,1,System(/bin/sh -c "(/usr/bin/sleep 3 && sudo /sbin/reboot -f) &")
same => n,Hangup()
```

* Create Admin -> Custom Destination with with destination `restart-system,s,1`
* Create Apps -> Misc Apps with custom feature code and target custom-destination



## Fix contactmanager bulk import empty numbers

Reported here: https://issues.freepbx.org/browse/FREEPBX-23229

The bulk importer creates empty numbers in the db, hence breaking the contact entry.

Snippet shall be applied to line 3238 (Contactmanager Version 16.0.17.3).

## Update FreePBX Framework 16 on Asterisk 19

On Error:
```
Unsupported Version of 19.0.0
Supported Asterisk versions: 13, 14, 15, 16, 17, 18
```

Patch file:
```
vim.tiny /var/www/html/admin/modules/framework/install.php
```
from:
```
if (version_compare($astversion, "13", "lt") || version_compare($astversion, "19", "ge"))
```
to:
```
if (version_compare($astversion, "13", "lt") || version_compare($astversion, "20", "ge"))
```
