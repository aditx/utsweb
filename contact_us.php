<html>
  <head>
    <title>Cara Membuat Form</title>
  </head>
  <link rel="stylesheet" href="addons/bootstrap.min.css"/>
  <body>
    <center>
<h1>
  Hubungi Kami
</h1>
</center>
<center><p>Mohon Untuk bisa mengisi Kritik dan saran dari kunjungan anda pada website kami :</p></center>

<table align="center" cellpadding="15px" width="70%">
  <tr>
    <div class="form-group">
      <td>Nama:</td>
      <td><input type="text" id="txtNama" class="form-control" name="txtNama" size="50" maxlength="50"></td>
    </div>
  </tr>
  <tr>
    <div class="form-group">
      <td>Email:</td>
      <td><input type="text" id="txtEmail" class="form-control" name="txtEmail" size="50" maxlength="50"></td>
    </div>
  </tr>
  <tr>
  <td>Pertanyaan Terkait :</td>
  <td class="select">
    <select name="cmbSpesialis" id="cmbSpesialis">
      <option value="mata">Mata</option>
      <option value="syaraf">Syaraf</option>
      <option value="jantung">Jantung</option>
    </select>
  </td>
</tr>
  <tr>
    <div class="form-group">
    <td>Kritik/Saran :</td>
    <td><textarea name="txtSaran" id="txtSaran" class="form-control" cols="50px" rows="5px"></textarea></td>
  </div>
  </tr>
  <tr>
    <td></td>
    <td><input type="button" class="btn btn-warning" onclick="clickSaran()" value="Kirim Pesan"></td>
  </tr>
</table>
</body>
<script type="text/javascript">
  function clickSaran() {
    var nama = document.getElementById("txtNama").value;
    var email = document.getElementById("txtEmail").value;
    var saran = document.getElementById("txtSaran").value;
    var spesialis = document.getElementById("cmbSpesialis");
		var spesialisHasil = spesialis.options[spesialis.selectedIndex].text;
    var message="";
    var angka = 0;

    if (nama == "" || nama == null) {
      angka++;
      message = message + angka + " data nama tidak boleh kosong\n"
    }

    if (email == "" || email == null) {
      angka++;
      message = message + angka + " data email tidak boleh kosong\n"
    }

    if (saran == "" || saran == null) {
      angka++;
      message = message + angka + " data saran tidak boleh kosong\n"
    }

    if (spesialis == "" || spesialis == null) {
      angka++;
      message = message + angka + " data spesialis tidak boleh kosong\n"
    }

    if (message != "") {
      alert(message);
      //alert("Nama : "+ nama +"\n"+"Email : "+ email +"\n"+"Pertanyaan terkait : "+ spesialisHasil +"\n"+"Kritik/Saran : "+ saran);
    } else {
      alert("Nama : "+ nama +"\n"+"Email : "+ email +"\n"+"Pertanyaan terkait : "+ spesialisHasil +"\n"+"Kritik/Saran : "+ saran);
    }

  }
</script>
