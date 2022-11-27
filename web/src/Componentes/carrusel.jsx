import React from 'react'
import Carousel from 'react-bootstrap/Carousel';
import 'bootstrap/dist/css/bootstrap.min.css';
import Bici1 from '../imagenes/bici1.jpeg';
import Bici2 from '../imagenes/bici2.jpg';
import Bici3 from '../imagenes/bici3.jpg';
import '../Estilos/carousel.css';
export default function carrusel() {
  return (
    <div className='carousel'>
        <Carousel className='carus-item'>
          <Carousel.Item interval={5000}>
            <img
              className="bicis"
              src={Bici3}
              alt="First slide"
              width={'848px'}
              height={'600px'}
            />
            <Carousel.Caption>
              <h3>First slide label</h3>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </Carousel.Caption>
          </Carousel.Item>
          <Carousel.Item interval={5000}>
            <img
              className="bicis"
              src={Bici1}
              alt="Second slide"
              width={'848px'}
              height={'600px'}
            />
            <Carousel.Caption>
              <h3>Second slide label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </Carousel.Caption>
          </Carousel.Item  >
          <Carousel.Item interval={5000}>
            <img
              className="bicis"
              src={Bici2}
              alt="Third slide"
              width={'848px'}
              height={'600px'}
            />
            <Carousel.Caption>
              <h3>Third slide label</h3>
              <p>
                Praesent commodo cursus magna, vel scelerisque nisl consectetur.
              </p>
            </Carousel.Caption>
          </Carousel.Item>
        </Carousel>
    </div>
  )
}
