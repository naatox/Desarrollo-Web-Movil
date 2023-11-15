import { Component, OnInit } from '@angular/core';
import { ApiService } from '../Service/api.service';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {
data: any[]=[];
technologies: any[] = [];
networks: any[] = [];
interests: any[] = [];
constructor (private ApiService: ApiService){

}

ngOnInit(){
  this.fillData();
}
fillData(){
  this.ApiService.getData().subscribe(data => {
    console.log(data);
    this.data = data;

    this.technologies = data[0].technologies;
    this.networks = data[0].networks;
    this.interests = data[0].interests;


  } );


}


}
