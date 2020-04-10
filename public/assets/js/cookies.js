window.CookieConsent.init({
    // More link URL on bar
    modalMainTextMoreLink: null,
    // How lond to wait until bar comes up
    barTimeout: 1000,
    // Look and feel
    theme: {
        barColor: '#000000',
        barTextColor: '#FFF',
        barMainButtonColor: '#FFF',
        barMainButtonTextColor: '#000000',
        modalMainButtonColor: '#000000',
        modalMainButtonTextColor: '#FFF',
    },
    language: {
        // Current language
        current: 'fr',
        locale: {
            en: {
                barMainText: 'Ce site utilise des cookies afin d\'assurer à ses utilisateurs la meilleure experience possible.',
                barLinkSetting: 'Paramètres',
                barBtnAcceptAll: 'Accepter tous les cookies',
                modalMainTitle: 'Paramètres de cookies',
                modalMainText: 'Les cookies sont des petites boîtes de données envoyés par le site web vers l\'utilisateur afin de sauvegarder des données sur celui-ci. Ils peuvent servir à un site web à mieux comprendre le comportement de ses utilisateurs, ou alors simplement à le faire fonctionner.',
                modalBtnSave: 'Sauvegarder',
                modalBtnAcceptAll: 'Accepter tous les cookies',
                modalAffectedSolutions: 'Solutions affectés:',
                learnMore: 'En savoir plus',
                on: 'On',
                off: 'Off',
            }
        }
    },
    // List all the categories you want to display
    categories: {
        // Unique name
        // This probably will be the default category
        necessary: {
            // The cookies here are necessary and category cant be turned off.
            // Wanted config value  will be ignored.
            needed: false,
            // The cookies in this category will be let trough.
            // This probably should be false if not necessary category
            wanted: true,
            // If the checkbox is on or off at first run.
            checked: true,
            // Language settings for categories
            language: {
                locale: {
                    en: {
                        name: 'Strictly Necessary Cookies',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu commodo est, nec gravida odio. Suspendisse scelerisque a ex nec semper.',
                    },
                    fr: {
                        name: 'Cookies non essentiels',
                        description: 'Ces cookies ne sont pas nécessaires au bon fonctionnement de atelier-brugeras.com',
                    },
                    hu: {
                        name: 'Szükséges sütik',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu commodo est, nec gravida odio. Suspendisse scelerisque a ex nec semper.',
                    }
                }
            }
        },
        unnecessary: {
            // The cookies here are necessary and category cant be turned off.
            // Wanted config value  will be ignored.
            needed: true,
            // The cookies in this category will be let trough.
            // This probably should be false if not necessary category
            wanted: true,
            // If the checkbox is on or off at first run.
            checked: true,
            // Language settings for categories
            language: {
                locale: {
                    en: {
                        name: 'Strictly Necessary Cookies',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu commodo est, nec gravida odio. Suspendisse scelerisque a ex nec semper.',
                    },
                    fr: {
                        name: 'Cookies strictement nécessaires',
                        description: 'Ces cookies sont nécessaires au bon fonctionnement de atelier-brugeras.com',
                    },
                    hu: {
                        name: 'Szükséges sütik',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu commodo est, nec gravida odio. Suspendisse scelerisque a ex nec semper.',
                    }
                }
            }
        }
    },
    // List actual services here
    services: {
        // Unique name
        analytics: {
            // Existing category Unique name
            // This example shows how to block Google Analytics
            category: 'necessary',
            // Type of blocking to apply here.
            // This depends on the type of script we are trying to block
            // Can be: dynamic-script, script-tag, wrapped, localcookie
            type: 'dynamic-script',
            // Only needed if "type: dynamic-script"
            // The filter will look for this keyword in inserted scipt tags
            // and block if match found
            search: 'analytics',
            // List of known cookie names or Regular expressions matching
            // cookie names placed by this service.
            // These willbe removed from current domain and .domain.
            cookies: [
                {
                    // Known cookie name.
                    name: '_gid',
                    // Expected cookie domain.
                    domain: `.${window.location.hostname}`
                },
                {
                    // Regex matching cookie name.
                    name: /^_ga/,
                    domain: `.${window.location.hostname}`
                }
            ],
            language: {
                locale: {
                    en: {
                        name: 'Google Analytics'
                    },
                    fr: {
                        name: 'Google Analytics'
                    },
                    hu: {
                        name: 'Google Analytics'
                    }
                }
            }
        }
    }
});