import { Component, signal } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { HomeComponent } from './home/home';

@Component({
  selector: 'app-root',
  imports: [HomeComponent],
  template: `

  <main>
    <header class="brand-name">
     <img class="brand-logo" [src]="'assets/location-pin.svg'" alt="logo">

    </header>
    <section class="content">
      <app-home></app-home>
    </section>
  </main>


  `,
  styleUrl: './app.css'
})
export class App {
  titles = 'homes';
}
