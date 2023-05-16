// import logo from './logo.svg';
import {useState, useEffect} from "react";
import './App.css';
import axios from "axios";
function App() {
    const [users, setusers] = useState([])

    useEffect(()=>{
        async function getALlUser(){
            try {
                const users = await axios.get('http://registryweb.com/api/auth/getAll')
                console.log(users.data)
                setusers(users.data)
            } catch (error){
                console.log(error)
            }
        }
        getALlUser()
    },[])
  return (
    <div className="App">
      <h1>Connect to React by Laravel</h1>
        {
            users.map((users, i) =>{
                return <h2 key={i}>{users.name} {users.email}</h2>
            })
        }
    </div>
  );
}

export default App;
