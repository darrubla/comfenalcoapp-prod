import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import CausasAdmin from './CausasAdmin.js';
import Cie10Admin from './Cie10Admin.js';
import EstadosAdmin from './EstadosAdmin';
import IpsAdmin from './IpsAdmin';

class MenuGenerales extends Component {
    constructor(props) {
        super(props);

        // bind

    }
    render() {
        
        return (
            <div>
                <ul className="nav nav-tabs">
                    <li className="nav-item">
                        <a className="nav-link active" data-toggle="pill" href="#ce">Causa externa</a>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link" data-toggle="pill" href="#cie10">Cie10</a>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link" data-toggle="pill" href="#diase">Días especilidades</a>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link" data-toggle="pill" href="#estados">Estados</a>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link" data-toggle="pill" href="#ips">Ips</a>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link" data-toggle="pill" href="#validacion">Validación derechos</a>
                    </li>
                </ul>

            
                <div className="tab-content">
                    <div className="tab-pane container active" id="ce"><CausasAdmin /></div>
                    <div className="tab-pane container fade" id="cie10"><Cie10Admin /></div>
                    <div className="tab-pane container active" id="diase"></div>
                    <div className="tab-pane container fade" id="estados"><EstadosAdmin /></div>
                    <div className="tab-pane container active" id="ips"><IpsAdmin /></div>
                    <div className="tab-pane container fade" id="validacion"></div>
                    
                </div>
            </div>
        );
    }

}

export default MenuGenerales;
/*
if (document.getElementById('menuUsuarios')) {
    ReactDOM.render(<MenuUsuarios />, document.getElementById('menuUsuarios'));
}
*/