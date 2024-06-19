/** @type {import('next').NextConfig} */
const nextConfig = {
    trailingSlash: true,
    async rewrites() {
      return [
        {
          source: '/:path*',
          destination: '/:path*/',
        },
      ];
    },
  };
  
  export default nextConfig;