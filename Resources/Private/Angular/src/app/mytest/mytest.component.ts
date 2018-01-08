import { Component, ViewContainerRef } from '@angular/core';
import { AppsappModuleProvider, PersistableModel, IsList, IsPhoneNumber, IsString, ArrayMinSize, ArrayMaxSize, HasConditions, IsText, IsInt, IsPassword, Min, Max, HasLabel, IsDateRange, HasDescription, IsSelect} from 'appsapp-module';


@Component({
  selector: 'app-mytest',
  templateUrl: './mytest.component.html',
  styleUrls: ['./mytest.component.css'],
})

export class MytestComponent {

    myModel: MyModel;

    constructor(appsappModuleProvider: AppsappModuleProvider) {
        this.myModel = appsappModuleProvider.new(MyModel);
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

export class Phone extends PersistableModel {

    @IsString() description: string = '';
    @IsPhoneNumber() number: string = '';

}

export class MyModel extends PersistableModel {

    @HasLabel('Phone') @IsList(Phone) phonenumbers: object = [];
    @ArrayMinSize(1) @IsList(Phone) list1: object = [];


}
