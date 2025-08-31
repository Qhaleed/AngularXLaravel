import { Component, Input } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Housinglocation } from '../housinglocation';
@Component({
  selector: 'app-housing-location',
  imports: [],
  template: `
    <section class="listing">
    <img class="listing-photo" [src]="Housinglocation.photo" alt="Exterior photo of {{Housinglocation.name}}">
    <h2 class="listing-heading">{{ Housinglocation.name }}</h2>
    <p class="listing-location">{{ Housinglocation.city}}, {{Housinglocation.state }}</p>
  </section>
  `,
  styleUrl: './housing-location.css'
})
export class HousingLocationComponent {
  @Input() Housinglocation!: Housinglocation
}
