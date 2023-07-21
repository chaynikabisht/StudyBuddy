import axios from "axios";
import "regenerator-runtime/runtime";
import { login_load } from "./controler/login_load";
import { global } from "./Global";

// initialising app

window.addEventListener("beforeunload", async (e) => {
  const del = await axios
    .get(`http://localhost:3000/delete/${global.email}`)
    .catch((err) => console.log(err));
});

document.onload = login_load();
