import { Component, Input } from '@angular/core';
import { CommonModule } from '@angular/common';
import { housingLocation } from '../housinglocation';
@Component({
  selector: 'app-housing-location',
  imports: [CommonModule],
  template: `
    <section class="listing">
    <img class="listing-photo" [src]="housingLocation.photo" alt="Exterior photo of {{housingLocation.name}}">
    <h2 class="listing-heading">{{ housingLocation.name }}</h2>
    <p class="listing-location">{{ housingLocation.city}}, {{housingLocation.state }}</p>
  </section>
  `,
  styleUrl: './housing-location.css'
})
export class HousingLocationComponent {
  @Input() housingLocation!: housingLocation;
}
