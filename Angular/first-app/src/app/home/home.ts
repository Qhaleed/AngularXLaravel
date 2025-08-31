import { Component } from '@angular/core';
import { HousingLocation } from '../housing-location/housing-location';
@Component({
  selector: 'app-home',
  imports: [HousingLocation],
  template: `
   <section>
    <form>
      <input type="text" placeholder="Filter by city">
      <button class="primary" type="button">Search</button>
    </form>
  </section>

  <section class="results">
    <app-housing-location></app-housing-location>
  </section>


  `,
  styleUrl: './home.css'
})
export class Home {

  // add read only image

  readonly baseUrl = 'https://angular.io/assets/images/tutorials/faa';

  housingLocation: HousingLocation = {
    id: 999,
    name: "tesssting home",
    city: "Zamboanga City",
    state: "Zamboanga del Sur",
    photo: `${this.baseUrl}/example-house.jpg`,
    availableUnits: 1,
    wifi: true,
    laundry: true
  }

}
