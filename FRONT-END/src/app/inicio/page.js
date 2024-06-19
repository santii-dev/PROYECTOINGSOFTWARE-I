'use client';
import Image from "next/image";
import '../inicio/page.css';
import { useEffect } from 'react';
import { initializeCarousel } from './front.js';




// page.js

export default function Inicio() {
    useEffect(() => {
        initializeCarousel();
    }, []);

    return (
        <>
            
        
            <div id="container">
                
                <div id="carousel">
                    <img src="https://images.pexels.com/photos/5772681/pexels-photo-5772681.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" />
                    <img src="https://images.pexels.com/photos/1624496/pexels-photo-1624496.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" />
                    <img src="https://images.pexels.com/photos/1703314/pexels-photo-1703314.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" />
                    <img src="https://images.pexels.com/photos/1793525/pexels-photo-1793525.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" />
                    <img src="https://images.pexels.com/photos/2754200/pexels-photo-2754200.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" />
                    <img src="https://images.pexels.com/photos/2531237/pexels-photo-2531237.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" />
                    <img src="https://images.pexels.com/photos/1374064/pexels-photo-1374064.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" />
                    <img src="https://images.pexels.com/photos/1020016/pexels-photo-1020016.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" />
                </div>
                <div id="sol"></div>
            </div>
            <div id="signature">
                <p>© Universidad Catolica De Pereira</p>
            </div>
            
            
        </>

    );

    // Resto de tu código...
}
