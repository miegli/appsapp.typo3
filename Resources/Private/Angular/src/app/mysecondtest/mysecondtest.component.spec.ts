import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { MysecondtestComponent } from './mysecondtest.component';

describe('MysecondtestComponent', () => {
  let component: MysecondtestComponent;
  let fixture: ComponentFixture<MysecondtestComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ MysecondtestComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(MysecondtestComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
