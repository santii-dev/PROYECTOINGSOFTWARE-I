import '../listado/listado.css';

export default function Page() {
    return (
        <div className="container">
            <ul className="t_estudiantes">
                <li>ASIGNAR ESTUDIANTES</li>
            </ul>
            <ul className="estudiantes">
                <li>
                    <label htmlFor="item1">Estudiante 1</label>
                </li>
                <li>
                    <label htmlFor="item2">Estudiante 2</label>
                </li>
                <li>
                    <label htmlFor="item3">Estudiante 3</label>
                </li>
                <li>
                    <label htmlFor="item4">Estudiante 4</label>
                </li>
            </ul>
            <ul className="t_asignaturas">
                <li>ASIGNAR ASIGNATURAS</li>
            </ul>
            <ul className="asignaturas">
                <li>
                    <label htmlFor="item1">Asignatura 1</label>
                </li>
                <li>
                    <label htmlFor="item2">Asignatura 2</label>
                </li>
                <li>
                    <label htmlFor="item3">Asignatura 3</label>
                </li>
                <li>
                    <label htmlFor="item4">Asignatura 4</label>
                </li>
            </ul>
            <button>Seleccionar</button>
        </div>

    )
}