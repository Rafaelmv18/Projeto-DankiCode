import { FaFacebook, FaSearch, FaAlignJustify } from 'react-icons/fa';

export default function(){
    return(
        <div className='header'>
            <div className='headerLeft'>
            <div className='logo-fb'>
                <FaFacebook></FaFacebook>
            </div>
            <div className='search-fb'>
                <FaSearch></FaSearch>
            </div>
            <div className='menu-fb'>
                <FaAlignJustify></FaAlignJustify>
            </div>
            </div>
            <div className='headerRight'>
                <div className='plus-btn'>
                +
                </div>
            </div>
        </div>
    );
}