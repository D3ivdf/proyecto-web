import React from 'react'
import 'bootstrap/dist/css/bootstrap.min.css';
import '../Estilos/registro.css';
export default function Registrarce() {
  return (
    <div className='container'>
      <form className='form-group row'>
          <div className='col-4 row'>
                  <div className="mb-3 row">
                    <label for="staticNombre" className="col-sm-2 col-form-label">Nombres</label>
                  <div className="col-sm-12">
                    <input type="" className="form-control" id="exampleFormControlInput1" placeholder="Nombres"/>
                  </div>
                  </div>
                  <div className="mb-3 row">
                    <label for="staticFecha" className="col-sm-8 col-form-label">Fecha de Nacimiento</label>
                  <div className="col-sm-12">
                  <input type="date" className="form-control" id="exampleFormControlInput1"/>
                  </div>
                  </div>
                  <br /> 
                  <div className="col-6">
                    <div className="form-check">
                      <input className="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                      <label className="form-check-label" for="flexRadioDefault1">
                        Default radio
                      </label>
                  </div>
                  <br/>
                    <div className="form-check">
                      <input className="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                      <label className="form-check-label" for="flexRadioDefault1">
                        Default radio
                      </label>
                    </div>
                  </div>
                  <br/>
                  <br/>
                  <br/>
                  <div className="col-6">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                      <label class="form-check-label" for="flexCheckDefault">
                        Default checkbox
                      </label>   
                    </div>
                    <br/>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                      <label class="form-check-label" for="flexCheckDefault">
                        Default checkbox
                      </label>   
                    </div>
                  </div>
            </div>
            <br/>
            <div className='col-4 row'>
                  <div className="mb-4 row">
                    <label for="staticApellidos" className="col-sm-2 col-form-label">Apellidos</label>
                  <div className="col-sm-12">
                  <input type="text" className="form-control" id="exampleFormControlInput1" placeholder="Apellidos"/>
                  </div>
                  </div>
                  <div className="mb-3 row">
                    <label for="staticDireccion" className="col-sm-2 col-form-label">Direccion</label>
                  <div className="col-sm-12">
                  <input type="text" className="form-control" id="exampleFormControlInput1" placeholder="Direccion"/>
                  </div>
                  </div>
                  <div className="mb-3 row">
                    <label for="staticCedula" className="col-sm-2 col-form-label">Cedula</label>
                  <div className="col-sm-12">
                  <input type="text" className="form-control" id="exampleFormControlInput1" placeholder="Cedula"/>
                  </div>
                  </div>
                  <div className="mb-3 row">
                    <label for="inputPassword" className="col-sm-2 col-form-label">Password</label>
                  <div className="col-sm-12">
                    <input type="password" className="form-control" id="inputPassword"/>
                  </div>
                  </div>
                  <div className="mb-3 row">
                    <label for="inputPassword" className="col-sm-6 col-form-label">Confirm Password</label>
                  <div className="col-sm-12">
                    <input type="password" className="form-control" id="inputPassword"/>
                  </div>
                  </div>
            </div>
            <div className='col-4 row'>
                  <div className="mb-3 row">
                    <label for="staticEmail" className="col-sm-2 col-form-label">Email</label>
                  <div className="col-sm-12">
                    <input type="email" className="form-control" id="exampleFormControlInput1" placeholder="name@example.com"/>
                  </div>
                  </div>
                  <div className="mb-3 row">
                    <label for="staticcellnum" className="col-sm-6 col-form-label">Numero de celular</label>
                  <div className="col-sm-12">
                  <input type="text" className="form-control" id="exampleFormControlInput1" placeholder="Numero de celular"/>
                  </div>
                  </div>
                  <br/>
                  <div className="mb-3 row">
                  <select className="form-select" aria-label="Default select example">
                  <option selected>Genero</option>
                  <option value="1">Masculino</option>
                  <option value="2">Femenino</option>
                  <option value="3">Otros</option>
                  </select>
                  </div>
                  <br/>
                  <div className="mb-3 row">
                  <select className="form-select" aria-label="Default select example">
                  <option selected>Medio de trasporte</option>
                  <option value="1">Publico</option>
                  <option value="2">Privado</option>
                  </select>
                  </div>
                  <div className="mb-3 row">
                    <label for="staticcellnum" className="col-sm-2 col-form-label">Foto</label>
                  <div className="col-sm-12">
                  <input type="file" className="form-control" id="archivo"/>
                  </div>
                  </div>
            </div>
            <div>
              <button type="button" className="btn btn-primary">Enviar</button>
            </div>
      </form>
        
    </div>

  )
}
