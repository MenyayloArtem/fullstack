import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
import { Provider } from 'react-redux';
import { store } from './redux';
import { createBrowserRouter, RouterProvider } from 'react-router-dom';
import path from 'path';
import Main from './pages/Main/Main';
import Chat from './pages/Chat/Chat';
import ModalRouter from "./modals/ModalRouter";

// const router = createBrowserRouter([{
//   path : "/",
//   element : <Main />
// }, {
//   path : "/chat",
//   element : <Chat />
// }])

const root = ReactDOM.createRoot(
  document.getElementById('root') as HTMLElement
);

root.render(
  <Provider store={store}>
      <App />
  </Provider>
  
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
