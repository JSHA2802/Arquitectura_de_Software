/*import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './css/App.css'

const App = (()=>{

  return (
    <>
      <div>
       
        <ul>
          <li>hola</li>
        </ul>
      </div>
      
      <p>yo pude</p>
    </>
  )
}); */

/*import { usePage } from '@inertiajs/react';

export default function Home() {
    const { title, message } = usePage().props;

    return (
        <div>
            <h1>{title}</h1>
            <p>{message}</p>
        </div>
    );
}*/
import React from 'react';
export default function Home({ message }) {
  return (
      <div>
          <h1>{message}</h1>
          <h2>sebastian desd einertia</h2>
      </div>
  );
}