import { Component, OnInit, ViewContainerRef } from '@angular/core';

@Component({
  selector: 'app-mytest',
  templateUrl: './mytest.component.html',
  styleUrls: ['./mytest.component.css']
})
export class MytestComponent implements OnInit {

  constructor(private _vcr: ViewContainerRef) {



  }

  ngOnInit() {
      console.log(this._vcr.template);


  }

}
