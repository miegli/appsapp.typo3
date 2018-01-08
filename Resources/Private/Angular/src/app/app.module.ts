import {FormsModule} from '@angular/forms';
import {MbscModule} from '@mobiscroll/angular';
import {BrowserModule} from '@angular/platform-browser';
import {ApplicationRef, NgModule, ComponentFactoryResolver, Inject, InjectionToken} from '@angular/core';
import {AppsappModule} from 'appsapp-module';
import {DOCUMENT} from '@angular/common';
import {MytestComponent} from './mytest/mytest.component';

export const components: any = [MytestComponent];

@NgModule({
  declarations: components,
  imports: [
    FormsModule,
    MbscModule,
    BrowserModule,
    AppsappModule.initializeApp({
      apiKey: 'AIzaSyBEsibRXWWJrtSQ0SSKf7z8V9HpjdsnOF8',
      projectId: 'test-32b81'
    }, {
      saved: 'Die Änderungen wurden erfolgreich gespeichert.',
      processing: 'Die Verarbeitung läuft.',
      wait: 'Bitte warten.',
      done: 'Erfolgreich abgeschlossen.',
      submitted: 'Die Daten wurden übermittelt.',
      submittedInBackground: 'Die Daten wurden gespeichert und werden übermittelt, sobald eine Internetverbindung besteht.',
      disconnected: 'Die Verbindung wurde unterbrochen.',
      connected: 'Die Verbindung wurde wiederhergestellt.',
      error: 'Fehler',
      delete: 'Löschen',
      add: 'Hinzufügen'
    })

  ],
  entryComponents: components,
  providers: [],
  bootstrap: []
})
export class AppModule {
  doc: InjectionToken<Document>;
  constructor(private resolver: ComponentFactoryResolver, @Inject(DOCUMENT) private document) {
    this.doc = document;
  }

  ngDoBootstrap(appRef: ApplicationRef) {
    components.forEach((componentDef) => {
      const factory = this.resolver.resolveComponentFactory(componentDef);
      if (this.document.querySelectorAll(factory.selector).length) {
        const collection = this.document.querySelectorAll(factory.selector);
        for (let i = 0; collection[i]; i++) {
          appRef.bootstrap(factory, collection.item(i));
        }
      }
    });

  }

}


