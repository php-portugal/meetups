import Container from './container'
import { GITHUB_URL } from '../lib/constants'

const Footer = () => {
  const copyright = `<?pt @ ${new Date().getFullYear()} ?>`

  return (
    <footer className="bg-neutral-50 border-t border-neutral-200 mt-20 py-10">
      <Container>
        <div className="flex flex-col lg:flex-row items-center">
          <h3 className="text-4xl text-purple-900 font-serif lg:text-[2.5rem] font-bold tracking-tighter leading-tight text-center mb-5 lg:pr-4 w-full">
            {copyright}
          </h3>
        </div>

        <div className="flex flex-col lg:flex-row items-center">
          <p className="text-3xl font-serif leading-snug text-center w-full">
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
