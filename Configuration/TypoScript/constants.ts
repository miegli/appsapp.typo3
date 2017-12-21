
plugin.tx_appsapp_appsapp {
    view {
        # cat=plugin.tx_appsapp_appsapp/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:appsapp/Resources/Private/Templates/
        # cat=plugin.tx_appsapp_appsapp/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:appsapp/Resources/Private/Partials/
        # cat=plugin.tx_appsapp_appsapp/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:appsapp/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_appsapp_appsapp//a; type=string; label=Default storage PID
        storagePid =
    }
}
