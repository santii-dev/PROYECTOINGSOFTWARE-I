import '../subir-guia/subirguia.css';

export default function subirguia() {

    return(

        <>
<div className="container">
  <h1>Subir Archivo .ZIP</h1>
  <div className="guia">
    <form
      id="uploadForm"
      action="/upload"
      method="post"
      encType="multipart/form-data"
    >
      <input type="file" name="file" accept=".zip" required="" />
    </form>
    <div className="pdf">
      <h1>Subir Informe</h1>
      <form action="upload.php" method="post" encType="multipart/form-data">
        <input
          type="file"
          id="pdfFile"
          name="pdfFile"
          accept="application/pdf"
        />
      </form>
    </div>
    <div className="foto">
      <h1>Subir Foto</h1>
      <form
        id="uploadForm"
        action="/upload"
        method="post"
        encType="multipart/form-data"
      >
        <input type="file" name="file" accept="image/*" required="" />
      </form>
    </div>
    <button type="submit">subir</button>
  </div>
</div>

      </>
      
    );
}