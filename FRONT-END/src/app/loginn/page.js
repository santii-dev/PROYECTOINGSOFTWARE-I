import '../loginn/loginn.css';

export default function loginn() {
    return (
        <>
            <div className="contenedor">
                <div className="contenido-izquierda">
                    <div className="logoucp">
                        <img
                            src="logo.png"
                            alt="logo de colectivos UCP"
                        />
                    </div>
               
                    {/* Contenido izquierdo */}
                    <div className="formulario">
                        <h1>INGRESA TUS DATOS</h1>
                        <form method="post">
                            <div className="username">
                                <input type="text" required="" />
                                <label>Ingresa tu correo</label>
                            </div>
                            <div className="contraseña">
                                <input type="password" required="" />
                                <label>Ingresa tu contraseña</label>
                            </div>
                            <div className="recordar">¿Olvidó su contraseña?</div>
                            <button className="btn">verificar</button>
                            <div className="registrarse">
                                Recuperar Contraseña <a href="#">Click Aquí</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div className="imagen-derecha">
                    {/* Imagen en la parte derecha */}
                    <img src="U.Catolica-12-scaled.jpg" alt="Edificio de la UCP" />
                </div>
            </div>
        </>
    )
}