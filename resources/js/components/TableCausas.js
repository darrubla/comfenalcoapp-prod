import React, { useState, useEffect } from 'react'
import Axios from 'axios'


import axios from 'axios';


export default function TableCausas(props) {

    const eliminar = (u) => {
        props.handleEliminar(u.target.id)
    }
    const editar = (u) =>{
        props.handleEdition(u.target.id)
    }
    const causas = props.causas;
    //const { users } = this.state;
    const estadoTypes = ["Inactiva", "Activa"]
    return (
        <tbody>
            {Object.keys(causas).map((key) => (
                <tr key={key}><td></td><td>{causas[key]['causa_externa']}</td>
                <td>{estadoTypes[causas[key]['estado']]}</td>
                    <td><button className="btn btn-warning btn-sm" id={causas[key]['id']} onClick={editar}>Editar</button></td>
                    <td><button className="btn btn-primary btn-sm" id={causas[key]['id']} onClick={eliminar}>Cambiar estado</button></td>
                </tr>
            ))}
        </tbody>

    );

}
