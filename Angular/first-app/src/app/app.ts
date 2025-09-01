import { Component } from '@angular/core';
import { RouterOutlet, RouterLink } from '@angular/router';





@Component({
  selector: 'app-root',
  standalone: true,
  imports: [RouterOutlet, RouterLink],
  template: `

  <main>
    <a [routerLink]="['/']">
    <header class="brand-name">
     <img class="brand-logo" src="/assets/location-pin.svg" alt="logo">
      <h1>This is the AppComponent</h1>
    </header>
</a>
    <section class="content">

    <!-- <app-home>
</app-home> -->
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
