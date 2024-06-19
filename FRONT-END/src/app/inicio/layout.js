import "./page.css";


export default function RootLayout({ children }) {
  return (
    <html lang="en">

      <body >

        <div className="cuerpox">
            <img className="imagen" src="logo.png" alt="" />
            <h1 className="titulo" >PROYECTO COLECTIVOS UCP</h1>
            <div>
                 <button class="custom-btn btn-9">Ingresa!!</button>
            </div>
         </div>
        
        
        <div className="cuerpo">
            {children}
         </div>
    


      



      </body>
    </html>
  );
}
