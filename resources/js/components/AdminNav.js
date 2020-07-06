import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import MenuUsuarios from './MenuUsuarios.js';

import axios from 'axios';


class AdminNav extends Component {
    constructor(props) {
        super(props);  
        
        // bind
 
    }
    render() {
        return (
          <div className="row">
            <div className="col-1 "> 

                <ul className="nav nav-pills flex-column ">
                  <li className="nav-item">
                    <a className="nav-link active"  data-toggle="pill"href="#incapacidades">Incapacidades</a>
                  </li>
                  <li className="nav-item">
                    <a className="nav-link" data-toggle="pill" href="#usuarios">Usuarios</a>
                  </li>
                
                </ul>
            </div>
            <div className="col-11"> 
                <div className="tab-content">
                <div className="tab-pane container active" id="incapacidades">incapacidades</div>
                <div className="tab-pane container fade" id="usuarios"><MenuUsuarios /></div>
                
                </div>
            </div>
          </div>
        );
    }
    
}
export default AdminNav;

if (document.getElementById('adminNav')) {
    ReactDOM.render(<AdminNav />, document.getElementById('adminNav'));
}