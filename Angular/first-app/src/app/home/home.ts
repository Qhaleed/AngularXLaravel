import { Component, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { housingLocation } from '../housinglocation';
import { HousingLocationComponent } from '../housing-location/housing-location';
import { HousingServices } from '../housing';

@Component({
  selector: 'app-home',
  // standalone: true,
  imports: [HousingLocationComponent, CommonModule],
  template: `
   <section>
    <form>
      <input type="text" placeholder="Filter by city">
      <button class="primary" type="button">Search</button>
    </form>
  </section>

  <section class="results">

  <!-- <div *ngFor="let location of housingLocationList">
    <app-housing-location [housingLocation]="location">
    </app-housing-location>
  </div> -->

  @for(housingLocation of housingLocationList; track $index){
    <app-housing-location [housingLocation]="housingLocation">
    </app-housing-location>
  }


  </section>


  `,
  styleUrl: './home.css'
})


export class HomeComponent {

  housingLocationList: housingLocation[] = [];

  housingServices: HousingServices = inject(HousingServices);

  constructor() {
    this.housingLocationList = this.housingServices.getAllHousingLocation();
  }
}
// export class Home {

//   // add read only image

//   // readonly baseUrl = 'https://angular.io/assets/images/tutorials/faa';

//   // Housinglocation: Housinglocation = {
//   //   id: 999,
//   //   name: "tesssting home",
//   //   city: "Zamboanga City",
//   //   state: "Zamboanga del Sur",
//   //   photo: `${this.baseUrl}/example-house.jpg`,
//   //   availableUnits: 1,
//   //   wifi: true,
//   //   laundry: true
//   // }

// }
