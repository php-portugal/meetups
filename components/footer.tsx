import Container from './container'
import { GITHUB_URL } from '../lib/constants'

const Footer = () => {
  const copyright = `<?php Portugal @ ${new Date().getFullYear()} ?>`

  return (
    <footer className="bg-neutral-50 border-t border-neutral-200">
      <Container>
        <div className="pt-28 flex flex-col lg:flex-row items-center">
          <h3 className="text-4xl text-purple-900 font-serif lg:text-[2.5rem] font-bold tracking-tighter leading-tight text-center lg:text-left mb-10 lg:pr-4 lg:w-1/2">
            {copyright}
          </h3>
        </div>

        <div className="pb-28 flex flex-col lg:flex-row items-center">
          <p className="text-3xl font-serif mb-3 leading-snug text-center lg:text-left">
            <a className="hover:underline" href={GITHUB_URL} target="_blank" rel="noreferrer">
              View on GitHub
            </a>
          </p>
        </div>
      </Container>
    </footer>
  )
}

export default Footer
