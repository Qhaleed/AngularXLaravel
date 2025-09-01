import { Routes } from "@angular/router";
import { HomeComponent } from "./home/home";
import { Details } from "./details/details";


const routeConfig: Routes = [
  {
    path: '',
    component: HomeComponent,
    title: 'Home page'
  },
  {
    path: 'details/:id',
    component: Details,
    title: 'Home details'
  }
];

export default routeConfig;
