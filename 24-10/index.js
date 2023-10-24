const url = "https://jsonplaceholder.typicode.com/users"

const consultarAPI = async () => {
    const respuesta = await fetch(url)//await previene que se ejecutre la sig linea bloqueando el codigo.
    console.log(respuesta)
   
    const resultado = await respuesta.json()
    
        
    
    console.log(resultado)
}
consultarAPI();
      