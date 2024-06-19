import '../subir-guia/subirguia.css';

export default function subirguia() {

    return(

        <>
        <div className="Container">
            <h1>SUBIR GUIA</h1>
          <div className="guia">
            <form action="upload.php" method="post" encType="multipart/form-data">
              <label htmlFor="pdfFile">Selecciona un archivo PDF:</label>
              <input
                type="file"
                id="pdfFile"
                name="pdfFile"
                accept="application/pdf"
              />
              <button type="submit">Subir</button>
            </form>
          </div>
        </div>
      </>
      
    );
}