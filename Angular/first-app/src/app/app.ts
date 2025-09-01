import { Component, signal } from '@angular/core';
import { HomeComponent } from './home/home';
import { RouterModule } from '@angular/router';





@Component({
  selector: 'app-root',
  imports: [HomeComponent, RouterModule],
  template: `

  <main>
    <a [routerLink]="['']">
    <header class="brand-name">
     <img class="brand-logo" [src]="'assets/location-pin.svg'" alt="logo">

    </header>
</a>
    <section class="content">
      <router-outlet>
</router-outlet>
    </section>
  </main>


  `,
  styleUrl: './app.css'
})
export class App {
  titles = 'homes';
}
