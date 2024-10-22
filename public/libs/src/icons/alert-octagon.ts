import defaultAttributes from '../defaultAttributes';
import type { IconNode } from '../types';

const AlertOctagon: IconNode = [
  'svg',
  defaultAttributes,
  [
    [
      'polygon',
      { points: '7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2' },
    ],
    ['line', { x1: '12', x2: '12', y1: '8', y2: '12' }],
    ['line', { x1: '12', x2: '12.01', y1: '16', y2: '16' }],
  ],
];

export default AlertOctagon;
