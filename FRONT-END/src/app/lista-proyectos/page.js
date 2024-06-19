'use client';

import Image from "next/image";
import '../lista-proyectos/lista-proyectos.css';


export default function listaproyectos() {
    return (
        <>
            <div className="container">
                <div className="Header">
                    <img className="Logo" src="/logo.png" alt="Logo" width={500} height={300} />
                    <div className="Saludo">
                        <p>Hola, </p>
                    </div>
                    <img className="user-icon" src="/user-icon-on-transparent-background-free-png.webp" alt="Icono de usuario" width={500} height={300} />
                </div>
                <div className="buscador">
                    <input className="buscar" type="text" placeholder="Buscar Proyecto" />
                    <button className="agregar">AGREGAR PROYECTO</button>
                </div>
                <div className="barra_lateral">
                    <h2>Estudiantes</h2>
                    <ul>
                        <li>Estudiante 1</li>
                        <li>Estudiante 2</li>
                        <li>Estudiante 3</li>
                        <li>Estudiante 4</li>
                    </ul>
                    <h2>Asignaturas</h2>
                    <ul>
                        <li>Asignatura 1</li>
                        <li>Asignatura 2</li>
                        <li>Asignatura 3</li>
                        <li>Asignatura 4</li>
                    </ul>
                    <div className="proyecto">
                    </div>
                </div>
            </div>
        </>
    );
}