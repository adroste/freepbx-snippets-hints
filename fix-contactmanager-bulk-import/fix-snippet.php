                                                                case 'phone':
                                                                        if (!empty($value['number'])) {
                                                                                $contact['numbers'][] = array(
                                                                                                'number' => $value['number'],
                                                                                                'type' => isset($value['type']) ? $value['type'] : 'other',
                                                                                                'extension' => isset($value['extension']) ? $value['extension'] : '',
                                                                                                'flags' => isset($value['flags']) ? explode(',', $value['flags']) : array(),
                                                                                                'speeddial' => isset($value['speeddial']) ? $value['speeddial'] : '',
                                                                                                'locale' => isset($value['locale']) ? $value['locale'] : '',
                                                                                                );
                                                                        }
                                                                        break;