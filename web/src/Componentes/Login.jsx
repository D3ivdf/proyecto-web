import React from 'react'
import 'bootstrap/dist/css/bootstrap.min.css';
import '../Estilos/login.css';
export default function Login() {
  return (
    <div className='container'>
        <div className='col-4'></div>
        <div className='col-4'>
            <div className='card'>
                <div className='card-header'>
                    <h3>Inicio de sesion</h3>
                </div>
                <form className="row g-3">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"/>
                    </div>

                    <div className="mb-3">
                        <label for="inputPassword2" className="visually-hidden">Password</label>
                        <input type="password" className="form-control" id="inputPassword2" placeholder="Password"/>
                    </div>
                    <div className="mb-3">
                        <button type="submit" className="btn btn-primary mb-3">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
        <div className='col-4'></div>
    </div>
  )
}
