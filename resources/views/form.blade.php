<h1 xmlns="http://www.w3.org/1999/html">Form</h1>
<form method="post" action="NameSubmit" enctype="multipart/form-data">
    @csrf
  <table>
      <tr>
          <td>  <label>Name</label> </td><br/>
           <td><input type="textbox" name="name" /><br/><br/>
    <span class="message">
        @error('name')
        {{$message}}
        @enderror
    </span>
</td>
      </tr>
      <tr>
          <td><label>Address</label></td>
          <td><input type="textbox" name="address" /><br/><br/>
               <span class="message">
                    @error('address')
                         {{$message}}
                    @enderror

              </span>
          </td>
      </tr>
      <tr>
          <td><label>File</label></td>
          <td><input type="file" name="file" /><br/><br/>
            <span class="message">
                  @error('file')
                       {{$message}}
                  @enderror

            </span>
          </td>
      </tr>
      <tr>
          <td><input type="submit" name="sumbit" /></td>
      </tr>
</table>
</form>
<style>
    .message{color:red;}
</style>
