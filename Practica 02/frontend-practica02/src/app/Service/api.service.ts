import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ApiService {
  private url = 'http://127.0.0.1:8000/api/profile';


  constructor(private http: HttpClient) {}

  public getData() { Observable<any>
    return this.http.get<any>(this.url);
  }


}
