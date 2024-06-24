import { useEffect, useState } from 'react'
import './App.css'
import { getMovieList, searchMovie } from "./Api"

const App = () => {

  const [popularMovies, setPopularMovies] = useState([])

  useEffect(() => {
    getMovieList().then((result) => {
      setPopularMovies(result)
    })
  }, [])

  const PopularMovieList = () => {
    return popularMovies.map((movie, i) => {
      return (
        <div className="Movie-wrapper" key={i}>
          <div className="Movie-title">{movie.title}</div>
          <img className="Movie-image" src={`${import.meta.env.VITE_REACT_APP_BASEIMGURL}/${movie.poster_path}`} alt={movie.title} width="300px" />
          <div className="Movie-date">release : {movie.release_date}</div>
          <div className="Movie-rate">{movie.vote_average}</div>
        </div>
      )
    })
  }

  const search = async(q) => {
    if (q.length > 3) {
      const query = await searchMovie(q)
      setPopularMovies(query.results)
    }
  }

  return (
    <div className="App">
      <header className="App-header">
        <h1>MOVIE APPS</h1>
          <input
            className="Movie-search"
            placeholder="cari film"
            onChange={({ target }) => search(target.value)}
          />
        <div className="Movie-container">
          <PopularMovieList />
        </div>
      </header>
    </div>
  )
}

export default App
