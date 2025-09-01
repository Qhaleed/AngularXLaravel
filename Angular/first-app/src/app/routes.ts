import { Routes } from "@angular/router";
import { HomeComponent } from "./home/home";
import { DetailsComponent } from "./details/details";


const routeConfig: Routes = [
  {
    path: '',
    component: HomeComponent,
    title: 'Home page'
  },
  {
    path: 'details/:id',
    component: DetailsComponent,
    title: 'Home details'
  }
];

export default routeConfig;
