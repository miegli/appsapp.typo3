import { BrowserModule } from '@angular/platform-browser';
import {ApplicationRef, NgModule} from '@angular/core';


import { AppComponent } from './app.component';
import { MytestComponent } from './mytest/mytest.component';


@NgModule({
  declarations: [
    AppComponent,
    MytestComponent
  ],
  imports: [
    BrowserModule
  ],
    entryComponents: [AppComponent, MytestComponent],
  providers: [],
  bootstrap: []
})
export class AppModule {

    ngDoBootstrap(applicationRef: ApplicationRef) {

      try {
          applicationRef.bootstrap(AppComponent);
      } catch (e) {
        //
      }

      try {
          applicationRef.bootstrap(MytestComponent);
      } catch (e) {
        //
      }



      console.log(applicationRef);

    }
}
