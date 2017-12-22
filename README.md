# An appsApp typo3 sample extension

This extension code demonstrates how easy you integrate [appsApp](https://www.npmjs.com/package/appsapp-module) seamless to your Typo3 CMS project.

![Alt text](appsapp_typo3.png?raw=true "appsApp.io")

## Installation

You need mobiscroll. Please obtain a licence (see https://www.mobiscroll.com/) and then continue with the installation.

### With composer

Add to your projects composer.json and run composer install. Don't forget to activate the extension in Typo3 Backend or with CLI after that.

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/miegli/appsapp.typo3.git"
    }
  ],
  "require": {
    "appsapp/appsapp": "dev-master"
  }
}

```

### Without composer

Checkout the github repository. Don't forget to activate the extension in Typo3 Backend or with CLI after that. 

````bash
cd typo3conf/ext
git clone https://github.com/miegli/appsapp.typo3.git
````

### After successful installation

For displaying your appsApp / angular components just insert the  html markup represented by one of the components selectors in one of yours typo3 fluid templates. ```<app-mytest></app-mytest>``` as a working example.

#  Development

You find the typescript sources in ````./Resources/Private/Angular/src/app````. Feel free to edit all the files.

## Code scaffolding

Run `ng generate component component-name` to generate a new component. You can also use `ng generate directive|pipe|service|class|guard|interface|enum|module`.

## Build

Run `ng build` to build the project. The build artifacts will be stored in the `dist/` directory. Use the `-prod` flag for a production build.


## License

MIT © [Michael Egli](mailto:michael.egli@appsapp.io)