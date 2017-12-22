import { Component, ViewContainerRef } from '@angular/core';
import { AppsappModuleProvider, PersistableModel, IsString, HasConditions, IsText, IsInt, IsPassword, Min, Max, HasLabel, IsDateRange, HasDescription, IsSelect} from "appsapp-module";


@Component({
  selector: 'app-mytest',
  templateUrl: './mytest.component.html',
  styleUrls: ['./mytest.component.css']
})
export class MytestComponent {

    myModel: myModel;

    constructor(appsappModuleProvider: AppsappModuleProvider) {
        this.myModel = appsappModuleProvider.new(myModel,'test');
        console.log(this.myModel);
    }

    save() {

        this.myModel.save({
            name: 'googleSheets',
            data: {
                to: 'webmaster@appsapp.io'
            }
        });

    }

}

export class myModel extends PersistableModel {
    @IsString() name: string = '';
    @IsString() vorname: string = '';
    @IsInt() @Min(5) @Max(15) @HasDescription('please enter a number') number: number;
    @IsText(256) longtext: string;
    @IsPassword() passwort: string;
    @HasConditions([{property: 'number', value: 7, validator: 'min'}]) @HasLabel('Your text') text: string = 'test';
    @IsDateRange() daterange: object;
    @IsSelect({
        source: {
            url: 'https://jsonplaceholder.typicode.com/users/',
            mapping: {text: 'address.city', value: 'address.geo'}
        }
    }) adressen: object = [];
}