# freepbx-snippets-hints
A collection of snippets / hints for FreePBX


## Busy on busy for ring groups

See: https://community.freepbx.org/t/solved-ring-group-with-voicemail-and-busy-on-busy/47247/14


## Remove area code for incoming caller id

See: https://community.freepbx.org/t/strip-off-country-and-area-code-from-incoming-caller-id-name/37048/6


## Fix contactmanager bulk import empty numbers

Reported here: https://issues.freepbx.org/browse/FREEPBX-23229

The bulk importer creates empty numbers in the db, hence breaking the contact entry.

Snippet shall be applied to line 3238 (Contactmanager Version 16.0.17.3).