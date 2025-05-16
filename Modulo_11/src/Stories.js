import seenKid from './resource/seen kid.jpg'

export default function(){

    return(
        <div className='stories'>
            <div className='storiesCard'style={{backgroundImage:`url(${seenKid})`}}>
                <p>Guilherme Grilo</p>
            </div>
            <div className='storiesCard'style={{backgroundImage:`url(${seenKid})`}}>
                <p>Guilherme Grilo</p>
            </div>
            <div className='storiesCard'style={{backgroundImage:`url(${seenKid})`}}>
                <p>Guilherme Grilo</p>
                </div>
            <div className='storiesCard'style={{backgroundImage:`url(${seenKid})`}}>
                <p>Guilherme Grilo</p>
            </div>
            <div className='storiesCard'style={{backgroundImage:`url(${seenKid})`}}>
                <p>Guilherme Grilo</p>
            </div>
        </div>
    )
}