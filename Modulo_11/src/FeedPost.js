import seenKid from './resource/seen kid.jpg'
export default function(props){
    return(
        <div className='feedPosts'>
        <div className='feedPostSingle'>
          <div className='feedPost__profile'>
            <img src={seenKid}></img>
            <h3>{props.nome}<br></br> <span>{props.horario}</span></h3>
          </div>
          <div className='feedPost__content'>
            <p>{props.conteudo}</p>
            <img src={seenKid}></img>
          </div>
        </div>
      </div>
    );
}