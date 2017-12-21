import { Component } from '@angular/core';

@Component({
  selector: 'test',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'app';

  constructor() {
    console.log(this);
  }

}
