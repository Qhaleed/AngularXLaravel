import { Routes } from "@angular/router";
import { HomeComponent } from "./home/home";
import { DetailsComponent } from "./details/details";
import { SettingsComponent } from "./settings/settings";

const routeConfig: Routes = [
  {
    path: '',
    component: HomeComponent,
    title: 'Home page'
  },
  {
    path: 'settings',
    component: SettingsComponent,
    title: 'Settings Page'
  },
  {
    path: 'details/:id',
    component: DetailsComponent,
    title: 'Home details'
  }
];

export default routeConfig;
