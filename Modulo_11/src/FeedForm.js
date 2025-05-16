import { AiFillVideoCamera, AiOutlineFileImage, AiOutlineMeh } from 'react-icons/ai';
import seenKid from './resource/seen kid.jpg'

export default function(){
    return(

    <div className='feed'>
        <div className='feedForm'>
          <img src={seenKid}></img>
          <input type='text' placeholder='No que você está pensando?'></input>
        </div>
        <div className='feedIcons'>
          <div className='iconSingle'>
            <AiFillVideoCamera></AiFillVideoCamera>
            <span>Video ao vivo</span>
          </div>
          <div className='iconSingle img'>
            <AiOutlineFileImage></AiOutlineFileImage>
            <span>Foto/video</span>
          </div>
          <div className='iconSingle emoji'>
            <AiOutlineMeh></AiOutlineMeh>
            <span>Sentimento/atividade</span>
          </div>
        </div>
      </div>

    
    )
}