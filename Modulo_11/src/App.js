import './App.css';
import Header from './Header';
import Stories from './Stories';
import FeedForm from './FeedForm';
import FeedPost from './FeedPost'


function App() {
  return (
    <div className="App">
      <Header></Header>
      <Stories></Stories>
      <FeedForm></FeedForm>
      <FeedPost nome="Guilherme" conteudo='Live agora no canal' horario='20:00'></FeedPost>
      <FeedPost nome="Guilherme" conteudo='Live agora no canal' horario='20:00'></FeedPost>
      <FeedPost nome="Guilherme" conteudo='Live agora no canal' horario='20:00'></FeedPost>
    </div>
  );
}

export default App;


// 1h 20min
