import {BrowserModule} from '@angular/platform-browser';
import {ApplicationRef, NgModule, ComponentFactoryResolver} from '@angular/core';

import {MytestComponent} from './mytest/mytest.component';
import {MysecondtestComponent} from "./mysecondtest/mysecondtest.component";


export const components: any = [MytestComponent, MysecondtestComponent];

@NgModule({
    declarations: components,
    imports: [
        BrowserModule
    ],
    entryComponents: components,
    providers: [],
    bootstrap: []
})
export class AppModule {

    constructor(private resolver: ComponentFactoryResolver) {

    }

    ngDoBootstrap(appRef: ApplicationRef) {
        components.forEach((componentDef) => {
            const factory = this.resolver.resolveComponentFactory(componentDef);
            if (document.getElementsByTagName(factory.selector).length) {
                let collection = document.getElementsByTagName(factory.selector);
                for (var i = 0; collection[i]; i++) {
                    appRef.bootstrap(factory,collection.item(i));
                }
            }

        });

    }

}


